# QingScan
一个批量漏洞挖掘工具，黏合各种好用的扫描器。

## 介绍

QingScan 是一款聚合扫描器，本身不生产安全扫描功能，但会作为一个安全扫描工具的搬运工； 当添加一个目标后，QingScan会自动调用各种扫描器对目标进行扫描，并将扫描结果录入到QingScan平台中进行聚合展示

- GitHub：https://github.com/78778443/QingScan
- 码云地址：https://gitee.com/songboy/QingScan
- 详细文档：http://wiki.qingscan.songboy.site
- 哔哩哔哩：https://space.bilibili.com/437273065


#### 在线演示
在线体验地址：http://txy8g.songboy.site:8112/
用户名：admin   密码：admin
> 注：在线体验地址为功能演示，不会对目标实际扫描~

## 安装教程

1.  需要安装docker、docker-compose
2. 启动容器`cd QingScan/docker/20211204_01  && docker-compose up -d `
2. 首次启动需要更新容器内代码`docker exec  qingscan sh -c 'cd /root/qingscan && git fetch && git reset --hard origin/main' `
3. 启动内置MySQL数据库`docker exec  qingscan sh -c 'service mysql start'`
4. 浏览器访问  http://127.0.0.1:8000/ 自动进入登录界面

> 1. fortify 涉及许可证问题，镜像内不包含，需要自己将Linux版本的fortify放到`/data/tools`文件夹中
> 2. AWVS 调用主要通过API，需要自己将API配置系统，配置管理中去


## 联系我

在使用过程中有任何问题，可以通过微信联系我

微信交流群

![image](https://user-images.githubusercontent.com/8509054/147429274-c656ab10-3bfe-4b7b-8796-ad2559e737aa.png)


个人微信

![image](https://user-images.githubusercontent.com/8509054/146304488-6f48260f-af5a-4071-91be-6fc718fce551.png)


#### 功能展示
![image](https://user-images.githubusercontent.com/8509054/143174877-879408de-e594-4508-aa7c-b2fe095382cb.png)

![image](https://user-images.githubusercontent.com/8509054/143174979-f93bab2f-1506-4b01-9a2c-888a1c377478.png)

![image](https://user-images.githubusercontent.com/8509054/143175009-ceb5e762-4770-469e-827d-82937550d3a6.png)


![image](https://user-images.githubusercontent.com/8509054/143175022-d7821199-ef11-4f5d-a7ac-76003bd3074f.png)

![image](https://user-images.githubusercontent.com/8509054/143175091-91d04fea-0fa7-45ad-8f39-d8d77f816cbf.png)


![image](https://user-images.githubusercontent.com/8509054/143175157-0934560b-5ed2-4ce8-bc9b-9faff19e3517.png)

## 📑 Licenses
本工具禁止进行未授权商业用途，禁止二次开发后进行未授权商业用途。

本工具仅面向合法授权的企业安全建设行为，在使用本工具进行检测时，您应确保该行为符合当地的法律法规，并且已经取得了足够的授权。

如您在使用本工具的过程中存在任何非法行为，您需自行承担相应后果，我们将不承担任何法律及连带责任。

在使用本工具前，请您务必审慎阅读、充分理解各条款内容，限制、免责条款或者其他涉及您重大权益的条款可能会以加粗、加下划线等形式提示您重点注意。 除非您已充分阅读、完全理解并接受本协议所有条款，否则，请您不要使用本工具。您的使用行为或者您以其他任何明示或者默示方式表示接受本协议的，即视为您已阅读并同意本协议的约束。  

## 捐赠打赏

QingScan的迭代开发离不开每一位用户的支持，如果你觉得QingScan好用，麻烦在GitHub中点击 `star`;目前QingScan为免费软件，如果你对软件非常认可，也可以给我们进行捐赠，捐赠名单将会公示在QingScan主页中，同时对于捐赠的小伙伴，将会获得技术优先支持~

![image](https://user-images.githubusercontent.com/8509054/146757977-863d6d0d-45ae-4938-b238-be0d68c70570.png)

![image](https://user-images.githubusercontent.com/8509054/146758011-07c9fd4b-503f-4ad1-9a69-2393cbf7dcf9.png)


