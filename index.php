 <html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div id="app">
				<input type="text" name="" v-model="message">
				<p> Adios {{message}} </p>
				<div class="row">
					<ul class="col-sm-6">
						<li v-for="name in names" class="">
						{{name}}
						</li>
					</ul>
					<ul class="col-sm-6">
						<li v-for="name in names" v-text="name" >
						</li>
					</ul>
				</div>
				<input type="text" name="" id="input">
				<button id="button">Add Name</button>
				
			</div>
		</div>		
		<script type="text/javascript" src="js/jquery-3.1.1.min.css"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/vue.js"></script>

		<script type="text/javascript">
			new Vue({
				el:'#app',
				data: {
					message: 'Hello World',
					names:['Harry', 'James','Ron','Sirius']
				},

				mounted(){
					// alert('Hello');
				}
			});

			document.querySelector(#button).addEvetListener('click', () =>{
				docume
			});

		</script>
	</body>
</html>