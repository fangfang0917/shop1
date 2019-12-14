$(function(){
        var paging = 0;//页码数
        // dropload函数接口设置
        $('.order-box').dropload({
            scrollArea : window,
            // 下拉刷新模块显示内容
            autoLoad:true,
            distance:50,
            domUp : {
                domClass   : 'dropload-up',
                // 下拉过程显示内容
                domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                // 下拉到一定程度显示提示内容
                domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                // 释放后显示内容
                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>'
            },
            domDown : {
                domClass   : 'dropload-down',
                // 滑动到底部显示内容
                domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                // 内容加载过程中显示内容
                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
                // 没有更多内容-显示提示
                domNoData  : '<div class="dropload-noData"></div>'
            },
            // 1 . 下拉刷新 回调函数
            // loadUpFn : function(me){
            //     paging = 0;
            //     $.ajax({
            //         type: 'post',
            //         // 每次获取最新的数据即可
            //         url: orderlisturl,
            //         data:{
            //             page:paging
            //         },
            //         dataType: 'json',
            //         success: function(data){
            //
            //             // 为了测试，延迟1秒加载
            //             setTimeout(function(){
            //                 // 插入加载使用 html() 重置 DOM
            //                 $('.order-list').html(data);
            //                 // 每次数据加载完，必须重置
            //                 me.resetload();
            //             },1000);
            //         },
            //         // 加载出错
            //         error: function(xhr, type){
            //             alert('Ajax error!');
            //             // 即使加载出错，也得重置
            //             me.resetload();
            //         }
            //     });
            // },
            // 2 . 上拉加载更多 回调函数
            loadDownFn : function(me){
                $.ajax({
                    type: 'post',
                    url: orderlisturl,
                    data:{
                        page:paging
                    },
                    dataType: 'json',
                    success: function(data){
                        // data = JSON.parse(data);
                        console.log(data.length);
                        if(data.length <= 139){
                            // 再往下已经没有数据
                            // 锁定
                            if(paging == 0){
                                $('.order-list').append(data);
                            }
                            me.lock();
                            // 显示无数据
                            me.noData();
                            me.resetload();
                            return false;
                        }
                        // 为了测试，延迟1秒加载
                    setTimeout(function(){
                        // 加载 插入到原有 DOM 之后
                        $('.order-list').append(data);
                        paging++; // 每次请求，页码加1
                        // 每次数据加载完，必须重置
                        me.resetload();
                    },1000);
            },
                // 加载出错
                error: function(xhr, type){
                    alert('Ajax error!');
                    // 即使加载出错，也得重置
                    me.resetload();
                }
            });
    },
    threshold : 50 // 什么作用???
});
});