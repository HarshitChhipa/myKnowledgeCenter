# This related to the work I did to solve the Notification success rate.
## Problem -  We Send almost 30K notification and the success rate was only 20K and its just one scenario there are many more than Lac with same success rate.
---
## Solution
- We used third party to send our push notification or we run campaign on that platform for specific set of consumer so the devices we were troubling were Xiaomi and huawei.
- Now the Thing is Mi and Huawei have their own push servers to use them we needed to integrate their SDK into our application after integration I wrote our custom methods to handel the notification and it worked like a charm.

## Key learing

- Learned how to integrate any SDK with Android.
- How to write custom service for Android.
- Most importantly how to solve a large impacting issue for scalable solution and many more this was challenging as it was my first time with core Android.
