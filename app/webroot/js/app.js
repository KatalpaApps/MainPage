	var g_sActiveModule = false;	
	var g_aModuleList = false;
	
	function initModule(__sModuleName,__fnResizeWindow,__fnInit,__fnDestroy)
	{		
		if(!g_aModuleList)
			initApp();
		
		g_aModuleList[__sModuleName] = new Array();
		g_aModuleList[__sModuleName]['init']=__fnInit?__fnInit:defaultInit;
		g_aModuleList[__sModuleName]['resize']=__fnResizeWindow?__fnResizeWindow:defaultResize;
		g_aModuleList[__sModuleName]['destroy']=__fnDestroy?__fnDestroy:defaultDestroy;
				
		if(!g_sActiveModule && $('main.module'+__sModuleName).exists())
			activeModule(__sModuleName);

	
	}
	
	function activeModule(__sModuleName)
	{				
            if(g_sActiveModule)
			g_aModuleList[g_sActiveModule]['destroy']();

		g_sActiveModule = __sModuleName;
		
		g_aModuleList[__sModuleName]['init']();
		defaultResizeWindow();
	}
	
	function loadModule(__sModuleName,__oTarget,__sUrl)
	{			
		$(__oTarget).load(__sUrl, function() {
			activeModule(__sModuleName);
		});
	}
	
	function initApp()
	{		
		g_aModuleList = new Array();
		
		$( window ).resize(function() {
			defaultResizeWindow();
		});	
		
	}
	
	function defaultDestroy()
	{
		
	}
	
	function defaultInit()
	{
		
	}
	
	function defaultResize()
	{
		
	}	
	
	function defaultResizeWindow()
	{
		if(g_sActiveModule)
			g_aModuleList[g_sActiveModule]['resize'](jQuery(window).height(),jQuery(window).innerHeight());
	}