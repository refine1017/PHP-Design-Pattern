# 抽象工厂模式

## 代码说明

* 抽象工厂类： HardwareVendor
提供获取具体厂商的接口  
定义厂商生产手机和平板的接口

* 具体工厂类：AppleVendor,XiaomiVendor
负责具体生产手机和平板

* 抽象产品类：Phone,Pad
定义产品的接口

* 具体产品类：iPhone,Xiaomi5,iPad,XiaomiPad
实现产品的接口