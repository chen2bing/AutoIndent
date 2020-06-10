/**
 *  查看文章时加载，给段落添加缩进
 */
$(document).ready(function(){
	//获取文章的所有段落元素
	var allParas = document.getElementsByClassName("post-content")[0].getElementsByTagName("p");

	//在段落开头和每个<br>后添加两个空格
	for(var i = 0; i < allParas.length; i++){
		if(allParas[i].getElementsByTagName("br").length > 0){
			allParas[i].innerHTML = '&emsp;&emsp;' + allParas[i].innerHTML.replace(/<br>/g,'<br>&emsp;&nbsp;&nbsp;');
		}
		else{
		allParas[i].innerHTML = '&emsp;&emsp;' + allParas[i].innerHTML;
		}
	}
});

