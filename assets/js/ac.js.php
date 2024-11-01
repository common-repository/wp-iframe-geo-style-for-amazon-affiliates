
<?php

header('Content-Type: application/javascript');

?>

sessionStorage.setItem("ip", "0.0.0.0");
sessionStorage.setItem("country", "ES");


function wpigsfaa_getCountry(){
<?php


if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	//check ip from share internet
	$wpigsfaa_ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	//to check ip is pass from proxy
	$wpigsfaa_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	$wpigsfaa_ip = $_SERVER['REMOTE_ADDR'];
}


?>
		var ip = "<?=$wpigsfaa_ip; ?>";

		if(sessionStorage.getItem("ip") != ip){

			fetch('https://ipapi.co/json/').then(response => response.json()).then(data => {
				
				sessionStorage.setItem("ip", data.ip);
				sessionStorage.setItem("country", data.country_code);

				if(/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/.test(ip)){
					//location.reload();
					sessionStorage.setItem("ip", "0.0.0.0");
					sessionStorage.setItem("country", "ES");
				}

			}).catch(error => console.error(error));
		}


	
}



function wpigsfaa_renderAmazonAd(title, dest, data){
	document.getElementById(dest).innerHTML += ''
    + '<div class="wpigsfaa_' + data.template + '"><div class="wpigsfaa_ac_img_box_' + data.template + '">'
 	+ '<a class="wpigsfaa_ac_img_' + data.template + '" href="' + data.link + '" target="_blank" rel="nofollow noopener">'
 	+ '<img src="' + data.img + '" alt="' + data.title + '" />'
 	+ '</a>'
 	+ '<div class="wpigsfaa_ac_logo_' + data.template + '">' + data.logo + '</div>'
 	+ '</div>'
	+ '<div class="wpigsfaa_ac_body_' + data.template + '">'
	+ '<h5><a href="' + data.link + '" target="_blank" rel="nofollow noopener">' + data.title + '</a></h5>'
	+ '<div class="wpigsfaa_ac_price_' + data.template + '">' + data.price + '</div>'
	+ '<a class="wpigsfaa_ac_button_' + data.template + '" href="' + data.link + '" target="_blank" rel="nofollow noopener">'
	+ data.btntext
	+ '</a></div></div>';

}


function wpigsfaa_getAmazonAd_US(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "US"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_GB(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "GB"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_DE(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "DE"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_FR(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "FR"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_CA(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "CA"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_IT(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "IT"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_ES(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "ES"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_BR(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "BR"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_MX(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "MX"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_AU(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "AU"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}

function wpigsfaa_getAmazonAd_NL(dest, template, url, link, title=false){

	if(sessionStorage.getItem("country") == "NL"){
		wpigsfaa_getAmzn(dest, template, url, link, title);
	}

}







function wpigsfaa_getAmzn(dest, template, url, link, title=false){


		const info = new URLSearchParams("action=getamzurl&url=" + window.btoa(url));

		fetch(ajaxurl,{method:'POST', body: info}).then(resp => resp.json()).then(dat => {

			fetch(dat.url, { method: 'GET', credentials: 'same-origin', redirect: 'follow', cache: 'default'})
			    .then(res => res.text())
			    .then(html => {
			      const parser = new DOMParser();
			      const htmlDoc = parser.parseFromString(html, "text/html");

			      var price = htmlDoc.getElementsByClassName("price")[0].textContent;
			      var img_temp = htmlDoc.getElementById("prod-image").src;
			      var img = img_temp.replace("98,95_.jpg", "200,200_.jpg");
			      var btntext = html.match(/shopNow\.innerText\ \= \"(.*?)\";/);
			      var logotemp = htmlDoc.getElementsByClassName("amzn-ad-logo-holder")[0].innerHTML.match(/src\=\"(.*?)\"/);
			      var logo = '<img src="' + logotemp[1] + '">';


			      if(title.length == 0){
			        title = htmlDoc.getElementById("titlehref").textContent;
			      }
			      
			      if(link.length == 0){
			        link = htmlDoc.getElementById("titlehref").href;
			      }


						var ad = {link:link, price:price, img:img, title:title, btntext:btntext[1], logo:logo, template:template};

						wpigsfaa_renderAmazonAd(title, dest, ad);

			    })

		}).catch(err => console.error(err));


}







wpigsfaa_getCountry();