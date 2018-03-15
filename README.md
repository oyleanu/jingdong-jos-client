# 京东API for laravel5.5

## laravel
### 安装
`composer require oyleanu/jingdong-jos-client`
### 配置
* 执行 `php artisan vendor:publish --provider="Oyleanu\JosClient\JosClientServiceProvider"` 生成配置文件
* 编辑.env文件，设置JINGDONG_APP_KEY,JINGDONG_APP_SECRET
### 示例代码
```
	<?php
	use Oyleanu\JosClient\Facades\JosClient;
	use Jos\Request\WaresSearchRequest;
	
	$josclient = JosClient::connection();
	$req = new WaresSearchRequest;
	$req->setFields('ware_id,ware_status,title');
	$req->setPage(1);
	$req->setPageSize(100);
	$resp = josclient->execute($req,$token);
	
	dd($resp);
```
