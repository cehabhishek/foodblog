var ProductDetails=function(){"use strict";return{init:function(){$('#wysihtml5').wysihtml5();$("#tag-size, #tag-color, #tag-material, #tags").tagit();}};}();$(document).ready(function(){ProductDetails.init();$(document).on('theme-change',function(){$('.wysihtml5-sandbox, input[name="_wysihtml5_mode"], .wysihtml5-toolbar').remove();$('#wysihtml5').show();$('#wysihtml5').wysihtml5();});});}
	};
}();

$(document).ready(function() {
	ProductDetails.init();
  
  $(document).on('theme-change', function() {
		$('.wysihtml5-sandbox, input[name="_wysihtml5_mode"], .wysihtml5-toolbar').remove();
		$('#wysihtml5').show();
		$('#wysihtml5').wysihtml5();
	});
});