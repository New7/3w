	//下载列表地址
	var down_url = "/excelCtrl/index";
	//弹出内容
	var winDiv = ("<div id=\"export_excel_window\" class=\"mini-window\" title=\"提示信息\" style=\"width:280px;height:170px;align:center;\">");
		winDiv +=("<div style='font-size:14px;line-height:30px;margin-left:32px;'>");
		winDiv +=("<p>数据正在导出中,请到下载中心下载<p>");
		winDiv +=("<a style='cursor:pointer' onclick=\"redirect_to('"+down_url+"')\">连接到下载中心</a>");
		winDiv +=("</div>");
		winDiv +=("</div>");
	
	//列表导出
	function list_to_excel(export_url,data)
	{
		$("body").append(winDiv);
		mini.parse();
		$.post(export_url,data);
		var win = mini.get("export_excel_window");
		win.show();
	}
	//点击后隐藏
	function redirect_to(url)
	{
		mini.get("export_excel_window").hide();
		if(window.Owner){
			var tabs = window.Owner.mini.get("mainTabs");
			if(tabs == undefined)
				var tabs = window.Owner.top.mini.get("mainTabs");
			//判断Tab是否已存在
			var tid = "tab$exceldown";
			var tab = tabs.getTab(tid);
			if(!tab){
				//创建新的Tab
				var tab = {};
				tab.title = "下载列表";
				tab.name = tid;
				tab.url = url;
				tab.showCloseButton = true;
				tabs.addTab(tab);
			}else{
				tabs.updateTab ( tab, {url: url} )
				tabs.reloadTab ( tab )
			}
			//激活选中的Tab
			tabs.activeTab(tab);
		}else{
			window.open(url);
		}
	}