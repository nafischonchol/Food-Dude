<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Order;

use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function index(Request $request)
    {
        $req=$request;
        if(empty($req->mobile) || empty($req->email))
        {
            return back()->withInput()->with('warning',"Mobile and email required!");
        }
        if(empty($req->fname) || empty($req->lname))
        {
            return back()->withInput()->with('warning',"first name and last name required!");
        }
        $post_data = array();
        $post_data['total_amount'] = '100'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        $date=session('date');
        $people=session('people');

        if(empty(session('date')))
            $date='2021-09-25';
        if(empty(session('people')))
            $people='5';

        $data = new Order;
        $data->mobile = $req->mobile;
        $data->email = $req->email;
        $data->res_name = $req->res_name;
        $data->res_id = $req->res_id;
        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->specialReq = $req->specialReq;
        $data->hour = $req->date;
        $data->date =$date;
        $data->people = $people;

        // $data->date = session('date');
        // $data->people = session('people');
        $data->transaction_id = $post_data['tran_id'];

        $data->save();

        

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $req->fname;
        $post_data['cus_email'] = $req->email;
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $req->mobile;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";



        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }


    }
  
   
    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        
        $sslc = new SslCommerzNotification();

      
        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'zactive','hour','res_id')->first();

        if ($order_detials->zactive == 'Pending') 
        {

            
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation == TRUE) {
              
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['zactive' => 'Confrim']);

                // $sql="UPDATE `hours` SET tableQty=tableQty-1 where hours='".$order_detials->hour."' and res_id=".$order_detials->res_id;
                $sql="UPDATE `hours` SET tableQty=tableQty-1 where hours='".$order_detials->hour."' and res_id=1";

                // $update_product = DB::table('hours')
                //     ->where('hours', $order_detials->hour)
                //     ->where('res_id', $order_detials->res_id)

                //     ->update(['tableQty' => `tableQty`-1]);

                DB::update($sql);

                return redirect('searching_restaurant')->with('success','Order is successfully Completed');
            } else {
              
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['zactive' => 'Failed']);
                
                return redirect('searching_restaurant')->with('warning','validation Fail');
            }
        } else if ($order_detials->zactive == 'Confrim' || $order_detials->zactive == 'Complete') {
          
            return redirect('searching_restaurant')->with('success','Order is successfully Completed');
            // echo "Transaction is successfully Completed";
        } else {
            return redirect('searching_restaurant')->with('success','Invalid Transaction');
           
        }


    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'zactive')->first();

        if ($order_detials->zactive == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['zactive' => 'Failed']);
            
        return redirect('searching_restaurant')->with('warning','Transaction is Falied');

        } else if ($order_detials->zactive == 'Confrim' || $order_detials->zactive == 'Complete') {
            return redirect('searching_restaurant')->with('warning','Transaction is already Successful');

        } else {
            return redirect('searching_restaurant')->with('warning','Transaction is Invalid');
           
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'zactive')->first();

        if ($order_detials->zactive == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['zactive' => 'Canceled']);
                return redirect('searching_restaurant')->with('warning',"Transaction is Cancel");
           
        } else if ($order_detials->zactive == 'Confrim' || $order_detials->zactive == 'Complete') {
            return redirect('searching_restaurant')->with('warning',"Transaction is already Successful");
           
        } else {
            return redirect('searching_restaurant')->with('warning',"Transaction is Invalid");
        }


    }

    public function ipn(Request $request)
    {
       
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'zactive', 'currency', 'amount')->first();

            if ($order_details->zactive == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed IPN";
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                    echo "validation Fail";
                }

            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }

}
