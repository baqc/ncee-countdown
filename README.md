# ncee-countdown
Chinese Nation College Entrance Exam Countdown webpage.
全国大学入学考试倒计时

演示：
https://gaokao.m78.co

以下来自QQ日志的介绍：
做了个 高考倒计时网页 类API。
https://gk.m78.co/>year=参数1&bg=参数2
『调用方式』
1. 网址后可调用的是 年份和背景图序数。
2. 参数①，指的是高考年份，但由于是倒计时，如果年份小于次年高考，则自动为次年高考的倒计时。
eg：网址后为2021，则会显示2022年高考倒计时
3. 参数②，指的是背景图序数，已设置10张高校夜景作为背景图库。
eg: 网址后为2022&bg=9，将会显示第9张背景图
4. 参数①和②均可为空，但参数②不为空时参数①不得为空。参数①为空默认显示次年高考，参数②为空则随机背景图。

『演示』
2023 随机背景图
https://gk.m78.co/?year=2023
2023 第9张背景图
https://gk.m78.co/?year=2023&bg=9
