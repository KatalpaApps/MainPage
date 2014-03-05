	var g_fnDestroy = false;
	var g_fnResizeWindow = false;
	var g_sModule = 'unkown';
	
	function initModule(__moduleName,__fnResizeWindow,__fnInit,__fnDestroy)
	{		
		if(g_sModule == 'unkown')
			initApp();
		
		if(g_fnDestroy)
			g_fnDestroy();
			
		g_sModule = __moduleName;
		g_fnDestroy = __fnDestroy;
		g_fnResizeWindow = __fnResizeWindow;
		
		__fnInit();		
		
		defaultResizeWindow();
	}
	
	function initApp()
	{		
		$( window ).resize(function() {
			defaultResizeWindow();
		});	
		
	}
	
	function defaultResizeWindow()
	{
		if(g_fnResizeWindow)
			g_fnResizeWindow(jQuery(window).height(),jQuery(window).height());
	}