
//一
//function One($arr)
//{
//    for ($i = 1; $i < 24; $i++) {
//        print_r(str_shuffle($arr));
//        echo "\n";
//    }
//}
//One('123');

//二
//class TWO{
//    private $name;
//    private function _construct(){
//
//}
//    static public $instance;
//    static public function getinstance(){
//        if (!self::$instance){
//            self::$instance = new instance;
//            return self::$instance;
//        }
//    }
//    public function setname($n){
//        $this->name=$n;
//    }
//    public function getname(){
//        return $this->name;
//    }
//}
//$oa = Single::getinstance();
//$ob = Single::getinstance();
//$oa->setname('hello world');
//$ob->setname('good morning');
//echo $oa->getname();
//echo $ob->getname();


//三





















//四

//function findCommonPath($aPath,$bPath){
//    $aPath = explode("/", $aPath);
//    $bPath = explode("/", $bPath);
//    print_r(array_intersect($aPath,$bPath));
//}
//$aPath = '/a/b/c/d/test.php';
//$bPath = '/a/b/d/c/test.php';
//findCommonPath($aPath,$bPath);


//五
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>倒计时</title>
</head>
<script src="jquery-1.9.1.min.js"></script>
<body>
    <div id="timer" style="color: red"></div>
    <div id="warring" style="color: red;"></div>
</body>
</html>
<script type="text/javascript">
    var maxtime = 60*60;
    function CountDown(){
        if(maxtime>=0){
            minutes = Math.floor(maxtime / 60);
            seconds = Math.floor(maxtime % 60);
            msg = "距离结束还有" + minutes + "分" + seconds + "秒";
            document.all["timer"].innerHTML = msg;
        }else{
            clearInterval(timer);
            alert("时间到，结束!");
        }
    }
    timer = setInterval("CountDown", 1000);
</script>
