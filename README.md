# laravel-request-id

为请求生成唯一 id 的 laravel 中间件

# 安装

    composer require cmzz/laravel-request-id
    
# 使用

- 在 `app\Http\Kernel.php` 文件的 `$routeMiddleware` 数组中添加:

    'request.id' => \Cmzz\RequestId\Middleware\RequestIdMiddleware::class
    
- 加载中间件 

    public function __construct()
    {
        $this->middleware('request.id');
    }
    
- 获得`id`

    public function index(Request $request)
    {
        dd($request->requestId);
    }