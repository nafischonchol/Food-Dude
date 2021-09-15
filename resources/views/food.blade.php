
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{margin: 0; padding: 0;}
body{
    background-image:url("/images/bg-6.jpg");
   ;
	
}
.container
{
	width: 100%;
	height: 100%;
   
   
}
.top
{
	display: flex;
	width: 90vw;
	height: 90vh;
	margin-top: 10vh;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10vh;
}
.top ul
{
	list-style: none;
	width: 100%;
	height: 100%;
	z-index: 1;
	box-sizing: border-box;
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    gap: 10px;
}
.top ul li
{
	position: relative;
	overflow: hidden;
}
.top ul li img
{
	width: 100%;
   
	height: auto;
	overflow: hidden;
    height: 300px;
   
}


.lightbox
{
	position: fixed;
	width: 100%;
	height: 100%;
	text-align: center;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0,0.75);
	z-index: 999;
	opacity: 0;
	pointer-events: none;
}
.lightbox img
{
	max-width: 90%;
	max-height: 80%;
	position: relative;
	top: -100%;
	/* Transition */
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.lightbox:target
{
	outline: none;
	top: 0;
	opacity: 1;
	pointer-events: auto;
	transition: all 1.2s ease;
	-moz-transition: all 1.2s ease;
	-ms-transition: all 1.2s ease;
	-o-transition: all 1.2s ease;
	-webkit-transition: all 1.2s ease;
}
.lightbox:target img
{
	top: 0;
	top: 50%;
	transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}
.heading{
    text-align: center;


}
.heading:hover{
    color: white;
}
     
    
</style>
<body>
    <div class="heading">
        <a href="/ownrestaurant"><img src="/images/logo.png" alt=""></a>
    </div>
    <div class="container">
        <div class="top">
            <ul>
                <li><a href="#img_1">  <img src="/images/24912976.jpg"></a></li>
                <li><a href="#img_2"><img src="/images/24977023.jpg"></a></li>
                <li><a href="#img_3"><img src="/images/26246190.jpg"></a></li>
        
                
            </ul>
            <a href="#_1" class="lightbox trans" id="img_1"><img src="/image/24912976.jpg"></a>
            <a href="#_2" class="lightbox trans" id="img_2"><img src="/images/24977023.jpg"></a>
            <a href="#_3" class="lightbox trans" id="img_3"><img src="image/24912976.jpg"></a>
            
        </div>
    </div>
</body>
</html>
