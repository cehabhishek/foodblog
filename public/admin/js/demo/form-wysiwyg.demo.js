var handleBootstrapWysihtml5=function(){"use strict";$('#wysihtml5').wysihtml5();};var FormWysihtml=function(){"use strict";return{init:function(){handleBootstrapWysihtml5();}};}();$(document).ready(function(){FormWysihtml.init();$(document).on('theme-change',function(){$('.wysihtml5-sandbox, input[name="_wysihtml5_mode"], .wysihtml5-toolbar').remove();$('#wysihtml5').show();handleBootstrapWysihtml5();});});sihtml5();
		}
	};
}();

$(document).ready(function() {
	FormWysihtml.init();
	
	$(document).on('theme-change', function() {
		$('.wysihtml5-sandbox, input[name="_wysihtml5_mode"], .wysihtml5-toolbar').remove();
		$('#wysihtml5').show();
		handleBootstrapWysihtml5();
	});
});