document.getElementById('loader').addEventListener('click',up);

function up(){
	if( document.getElementById('loader').innerHTML=="load file"){
		System.exit(0);
	}
	document.getElementById('loading').style.display='block';

}
