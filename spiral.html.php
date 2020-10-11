<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			background-color: black;
		}
		#box {

height: 300px;
width: 300px;
top : 20em;
left: 40%;

position: relative;
transform-style: preserve-3d;
perspective: 400px;
transform: rotateX(60deg);




		}
		#box span {
position: absolute;
display: block;
border : 5px solid green;
box-shadow: 0 5px 0 green,inset 0 5px 0 green;
box-sizing: border-box;
border-radius: 50%;
animation : rotate 4s ease-in-out infinite;

			           
		}
		@keyframes rotate {
			0%,100% {
				transform: translateZ(-100px);
				/*transform: rotateY(360deg);*/
			}
			50%{
				transform: translateZ(100px);
			/*	transform: rotateX(0deg);*/
			}
		}
		#box span:nth-child(1){
			top : 0;
			left : 0;
			right: 0;
			bottom: 0;
			box-shadow: 1px 5px 50px  yellow;
			animation-delay: 1.5s;
		}
				#box span:nth-child(2){
			top : 10px;
			left : 10px;
			right: 10px;
			bottom: 10px;
			border-color: violet;
			box-shadow: 1px 5px 50px  green;
			animation-delay: 1.4s;
		}
				#box span:nth-child(3){
			top : 20px;
			left : 20px;
			right: 20px;
			bottom: 20px;
			border-color: indigo;
			box-shadow: 1px 5px 50px  blue;
			animation-delay: 1.3s;
		}
				#box span:nth-child(4){
			top : 30px;
			left : 30px;
			right: 30px;
			bottom: 30px;
			border-color: blue;
			box-shadow: 1px 5px 50px  purple;
			animation-delay: 1.2s;
		}
				#box span:nth-child(5){
			top : 40px;
			left : 40px;
			right: 40px;
			bottom: 40px;
			border-color: green;
			box-shadow: 1px 5px 50px  pink;
			animation-delay: 1s;
		}
				#box span:nth-child(6){
			top : 50px;
			left : 50px;
			right: 50px;
			bottom: 50px;
			border-color: yellow;
			box-shadow: 1px 5px 50px  navy;
			animation-delay: 0.9s;
		}
				#box span:nth-child(7){
			top : 60px;
			left : 60px;
			right: 60px;
			bottom: 60px;
			border-color: orange;
			animation-delay: 0.8s;
		}
				#box span:nth-child(8){
			top : 70px;
			left : 70px;
			right: 70px;
			bottom: 70px;
			border-color: red;
			animation-delay: 0.7s;
		}
				#box span:nth-child(9){
			top : 80px;
			left : 80px;
			right: 80px;
			bottom: 80px;
			border-color: green;
			box-shadow: 1px 5px 50px  pink;
			animation-delay: 0.6s;
		}
				#box span:nth-child(10){
			top : 90px;
			left : 90px;
			right: 90px;
			bottom: 90px;
			border-color: yellow;
			box-shadow: 1px 5px 50px  navy;
			animation-delay: 0.5s;
		}
				#box span:nth-child(11){
			top : 100px;
			left : 100px;
			right: 100px;
			bottom: 100px;
			border-color: orange;
			animation-delay: 0.4s;
		}
				#box span:nth-child(12){
			top : 110px;
			left : 110px;
			right: 110px;
			bottom: 110px;
			border-color: red;
			animation-delay: 0.3s;
		}
						#box span:nth-child(13){
			top : 120px;
			left : 120px;
			right: 120px;
			bottom: 120px;
			border-color: yellow;
			box-shadow: 1px 5px 50px  navy;
			animation-delay: 0.2s;
		}
				#box span:nth-child(14){
			top : 130px;
			left : 130px;
			right: 130px;
			bottom: 130px;
			border-color: orange;
			animation-delay: 0.1s;
		}
				#box span:nth-child(15){
			top : 140px;
			left : 140px;
			right: 140px;
			bottom: 140px;
			border-color: red;
			animation-delay: 0s;
		}





	</style>
</head>
<body>
	<div id="box">
		
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
	</div>

</body>
</html>