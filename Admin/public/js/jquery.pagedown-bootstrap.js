(function( $ ){

	$.fn.pagedownBootstrap = function( options ) {  

		// Default settings
		var settings = $.extend( {
			'sanitize'				: true,
			'help'						: null,
			'hooks'						: Array()
		}, options);

		return this.each(function() {   

			//Setup converter   
			var converter = null;
			if(settings.sanitize)
			{
				converter = Markdown.getSanitizingConverter();
			} else {
				converter = new Markdown.Converter()
			}

			//Register hooks
			for(var i in settings.hooks)
			{
				var hook = settings.hooks[i];
				if(typeof hook !== 'object' || typeof hook.event === 'undefined' 
						|| typeof hook.callback !== 'function')
				{
					//A bad hook object was given
					continue;
				}

				converter.hooks.chain(hook.event, hook.callback);

			}

			//Try to find a valid id for this element
			var id = "wmd-input";
			var idAppend = 0;
			while($("#"+id+"-"+idAppend.toString()).length > 0)
			{
				idAppend++;
			}

			//Assign the choosen id to the element
			$(this).attr('id', id+"-"+idAppend.toString());

			//Wrap the element with the needed html
			$(this).wrap('<div class="wmd-panel" />');
			$(this).before('<div id="wmd-button-bar-'+idAppend+'" class="wmd-button-bar" />');
			$(this).after('<div id="wmd-preview-'+idAppend+'" class="wmd-preview" />');
			$(this).addClass('wmd-input');

			//Setup help function
			help = null;
			if($.isFunction(settings.help))
			{
				help = { handler: settings.help };
			}

			//Setup editor
			var editor = new Markdown.Editor(converter, "-"+idAppend.toString(), help);
      editor.run();

		});

	};
})( jQuery );
