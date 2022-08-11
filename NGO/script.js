$(function(){
	let start=0;
	let end=$(".num4").html();
	let speed=100;
	setInterval(function(){
		if(start<end){
			start++;
		}
		$(".num4").html(start);
	},speed);
});
	
	
	
	$(function(){
	let start=400;
	let end=$(".num1").html();
	let speed=100;
	setInterval(function(){
		if(start<end){
			start++;
		}
		$(".num1").html(start);
	},speed);
});


	$(function(){
	let start=250;
	let end=$(".num2").html();
	let speed=100;
	setInterval(function(){
		if(start<end){
			start++;
		}
		$(".num2").html(start);
	},speed);
});


	$(function(){
	let start=87;
	let end=$(".num3").html();
	let speed=100;
	setInterval(function(){
		if(start<end){
			start++;
		}
		$(".num3").html(start);
	},speed);
});