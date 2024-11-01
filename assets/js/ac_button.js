(function() {


	function makeid(length) {
	   var result           = '';
	   var characters       = 'abcdefghijklmnopqrstuvwxyz0123456789';
	   var charactersLength = characters.length;
	   for ( var i = 0; i < length; i++ ) {
	      result += characters.charAt(Math.floor(Math.random() * charactersLength));
	   }
	   return result;
	}



     /* Register the buttons */
     tinymce.create('tinymce.plugins.wpigsfaa_buttons', {
          init : function(ed, url) {
               /**
               * Adds HTML tag to selected content
               */
               ed.addButton( 'wpigsfaa_button_amazon', {
                    title : 'Add Amazon converted box',
                    image : '../wp-content/plugins/wp-iframe-geo-style-for-amazon-affiliates/assets/img/icon.png',
                    cmd: 'wpigsfaa_button_cmd'
               });
               ed.addCommand( 'wpigsfaa_button_cmd', function() {





ed.windowManager.open({
  title: "Amazon Converter add box",
  bodyType: 'tabpanel',
  body: [
      {
        title: 'US',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_us', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_us', label  : 'Link URL'},
            {type: 'textbox', name: 'title_us', label  : 'Product Title'},
        ]
      },
      {
        title: 'GB',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_gb', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_gb', label  : 'Link URL'},
            {type: 'textbox', name: 'title_gb', label  : 'Product Title'},
        ]
      },
      {
        title: 'DE',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_de', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_de', label  : 'Link URL'},
            {type: 'textbox', name: 'title_de', label  : 'Product Title'},
        ]
      },
      {
        title: 'FR',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_fr', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_fr', label  : 'Link URL'},
            {type: 'textbox', name: 'title_fr', label  : 'Product Title'},
        ]
      },
      {
        title: 'CA',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_ca', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_ca', label  : 'Link URL'},
            {type: 'textbox', name: 'title_ca', label  : 'Product Title'},
        ]
      },
      {
        title: 'IT',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_it', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_it', label  : 'Link URL'},
            {type: 'textbox', name: 'title_it', label  : 'Product Title'},
        ]
      },
      {
        title: 'ES',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_es', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_es', label  : 'Link URL'},
            {type: 'textbox', name: 'title_es', label  : 'Product Title'},
        ]
      },
      {
        title: 'BR',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_br', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_br', label  : 'Link URL'},
            {type: 'textbox', name: 'title_br', label  : 'Product Title'},
        ]
      },
      {
        title: 'MX',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_mx', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_mx', label  : 'Link URL'},
            {type: 'textbox', name: 'title_mx', label  : 'Product Title'},
        ]
      },
      {
        title: 'AU',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_au', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_au', label  : 'Link URL'},
            {type: 'textbox', name: 'title_au', label  : 'Product Title'},
        ]
      },
      {
        title: 'NL',
        type: "form",
        items: [
            {type: 'textbox', name: 'iframe_nl', label  : 'Iframe Code', multiline: true},
            {type: 'textbox', name: 'link_nl', label  : 'Link URL'},
            {type: 'textbox', name: 'title_nl', label  : 'Product Title'},
        ]
      },
      {
        title: "More",
        type: "form",
        items: [
            {type: 'textbox', name: 'adid', label  : 'Box ID', value: "wpigsfaa_ac" + makeid(10)},
            {name: 'template', type: 'listbox', label: 'Box template', values: [
            		{text: 'Default', value: 'default'},
                {text: 'Modern', value: 'modern'},
            		{text: 'Red wine', value: 'redwine'},
            		{text: 'Apple', value: 'apple'},
            		{text: 'Custom 1', value: 'custom1'},
            		{text: 'Custom 2', value: 'custom2'},
            		{text: 'Custom 3', value: 'custom3'}

            	]
        	},
        ]
      },



  ],
  onsubmit: function(e) {

                  var win = e.control.rootControl;
                  var dat = win.toJSON();


                  var match_es = dat.iframe_es.match(/(?<=src=").*?(?=[\*"])/);
                  var match_gb = dat.iframe_gb.match(/(?<=src=").*?(?=[\*"])/);
                  var match_us = dat.iframe_us.match(/(?<=src=").*?(?=[\*"])/);
                  var match_ca = dat.iframe_ca.match(/(?<=src=").*?(?=[\*"])/);
                  var match_de = dat.iframe_de.match(/(?<=src=").*?(?=[\*"])/);
                  var match_fr = dat.iframe_fr.match(/(?<=src=").*?(?=[\*"])/);
                  var match_it = dat.iframe_it.match(/(?<=src=").*?(?=[\*"])/);
                  var match_au = dat.iframe_au.match(/(?<=src=").*?(?=[\*"])/);
                  var match_nl = dat.iframe_nl.match(/(?<=src=").*?(?=[\*"])/);
                  var match_mx = dat.iframe_mx.match(/(?<=src=").*?(?=[\*"])/);
                  var match_br = dat.iframe_br.match(/(?<=src=").*?(?=[\*"])/);



                  if((dat.adid) && (dat.adid != null)){


                    var str = '[amazon_convert adid="' + dat.adid + '"';


                    if((dat.template) && (dat.template != null)){
                      str += ' template="' + dat.template + '"';
                    }else{
                      str += ' template="default"';
                    }



                    if(match_es != null){
                      str += ' iframe_es="' + match_es + '"'
                          + ((dat.link_es != "") ? (' link_es="' + encodeURIComponent(dat.link_es) + '"'):'')
                          + ((dat.title_es != "") ? (' title_es="' + dat.title_es + '"'):'');
                    }

                    if(match_gb != null){
                      str += ' iframe_gb="' + match_gb + '"'
                          + ((dat.link_gb != "") ? (' link_gb="' + encodeURIComponent(dat.link_gb) + '"'):'')
                          + ((dat.title_gb != "") ? (' title_gb="' + dat.title_gb + '"'):'');
                    }

                    if(match_us != null){
                      str += ' iframe_us="' + match_us + '"'
                          + ((dat.link_us != "") ? (' link_us="' + encodeURIComponent(dat.link_us) + '"'):'')
                          + ((dat.title_us != "") ? (' title_us="' + dat.title_us + '"'):'');
                    }

                    if(match_ca != null){
                      str += ' iframe_ca="' + match_ca + '"'
                          + ((dat.link_ca != "") ? (' link_ca="' + encodeURIComponent(dat.link_ca) + '"'):'')
                          + ((dat.title_ca != "") ? (' title_ca="' + dat.title_ca + '"'):'');
                    }

                    if(match_de != null){
                      str += ' iframe_de="' + match_de + '"'
                          + ((dat.link_de != "") ? (' link_de="' + encodeURIComponent(dat.link_de) + '"'):'')
                          + ((dat.title_de != "") ? (' title_de="' + dat.title_de + '"'):'');
                    }

                    if(match_fr != null){
                      str += ' iframe_fr="' + match_fr + '"'
                          + ((dat.link_fr != "") ? (' link_fr="' + encodeURIComponent(dat.link_fr) + '"'):'')
                          + ((dat.title_fr != "") ? (' title_fr="' + dat.title_fr + '"'):'');
                    }

                    if(match_it != null){
                      str += ' iframe_it="' + match_it + '"'
                          + ((dat.link_it != "") ? (' link_it="' + encodeURIComponent(dat.link_it) + '"'):'')
                          + ((dat.title_it != "") ? (' title_it="' + dat.title_it + '"'):'');
                    }

                    if(match_au != null){
                      str += ' iframe_au="' + match_au + '"'
                          + ((dat.link_au != "") ? (' link_au="' + encodeURIComponent(dat.link_au) + '"'):'')
                          + ((dat.title_au != "") ? (' title_au="' + dat.title_au + '"'):'');
                    }

                    if(match_nl != null){
                      str += ' iframe_nl="' + match_nl + '"'
                          + ((dat.link_nl != "") ? (' link_nl="' + encodeURIComponent(dat.link_nl) + '"'):'')
                          + ((dat.title_nl != "") ? (' title_nl="' + dat.title_nl + '"'):'');
                    }

                    if(match_mx != null){
                      str += ' iframe_mx="' + match_mx + '"'
                          + ((dat.link_mx != "") ? (' link_mx="' + encodeURIComponent(dat.link_mx) + '"'):'')
                          + ((dat.title_mx != "") ? (' title_mx="' + dat.title_mx + '"'):'');
                    }

                    if(match_br != null){
                      str += ' iframe_br="' + match_br + '"'
                          + ((dat.link_br != "") ? (' link_br="' + encodeURIComponent(dat.link_br) + '"'):'')
                          + ((dat.title_br != "") ? (' title_br="' + dat.title_br + '"'):'');
                    }



                    str += ']';


                    ed.execCommand('mceInsertContent', 0, str);
                  }
                  
                  
                },


});




               });
          },
          createControl : function(n, cm) {
               return null;
          },
     });





     /* Start the buttons */
     tinymce.PluginManager.add( 'wpigsfaa_button_script', tinymce.plugins.wpigsfaa_buttons );
})();