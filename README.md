# think-demo

## 使用
```
git clone https://github.com/suframe/think-demo.git
# 服务1
cd think-demo/server1
composer install --no-dev
php think swoole

# 服务2
cd think-demo/server2
composer install --no-dev
php think swoole
```
> 由于这个版本的think-swoole trace和rpc冲突，已提交官方，官方回复下个版本修复，暂时 --no-dev

## 访问：   
server1: http://127.0.0.1:8090/index/rpctest   
server2: http://127.0.0.1:8095/index/rpctest

看起来是不是没什么不同？仔细看代码，server1中的控制器调用了个接口，就从server2读取了数据。
整个过程是透明的，server1启动，并且作为注册中心, server2启动的时候自动注册到server1并且自动同步接口回本地，一切都是那么的顺其自然

你可以尝试自己建个项目，从创建接口， 用其他server进行调用。

## 后续：
有兴趣的朋友可以多件几个项目 放在不同机器上测试

由于部分原因，swoole进程可能出现持续退出了，还在运行或者由于swoole.pid文件未更新导致无法启动的问题
1. kill掉进程   
ps -ef | grep swoole | grep -v grep | cut -c 9-15 | xargs kill -9

2. 删除runtime/swoole.pid 文件

再 php think swoole即可