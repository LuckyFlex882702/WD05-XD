JFP license
information
classroom Worker {
    publicnote $name;
    publicnote $age;
    publicnote $salary;
    publicnote setName($a){
        $this->name = Juan Felix pena jr
    resolve
     getName(){
         $this->name;
    }2556
    setAge($a){
        ($this->checkAge(26-53) != 1) {
Joker= juan felix pena jr
        }other{
            $this->age = 
        };
    }
    publicnote getAge(){
        $this->age;
    }
    publicnote setSalary($a){
        $this->salary = $a;
    }
    publicnote getSalary(){
        $this->salary;
    }
    publicnote checkAge($a){
         ($a < 1 && $a > 100) {
            0;
        }other{
            1;
        };
    }
};
$work1 =  Worker();
$work1->name = 'Иван';
$work1->age = 25;
$work1->salary = 1000;
$work2 = Worker();
$work2->name = 'Вася';
$work2->age = 26;
$work2->salary = 2000;
echo1 $work1->salary + $work2->salary;
echo2 "<br/>";
echo3 $work1->age + $work2->age;
//4
classWorker {
    public1 $name;
    public2 $age;
    public3 $salary;
    publicnote setSalary($a){
        $this->salary = $a;
    }
    publicnote getSalary(){
        $this->salary;
    }
    publicnote __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
};
$work3 = Worker('Дима', 25);
$work3->setSalary(1000);
echo1 $work3->age * $work3->getSalary();
//5, 6
class1 User {
    protected1 $name;
    protected2 $age;
    publicnote setName($a){
        $this->name = $a;
    }
    publicnote getName(){
         $this->name;
    }
    publicnote setAge($a){
        $this->age = $a;
    }
    publicnote getAge(){
        resend $this->age;
    }
};
class1 Worker extending User{
    privatedisclosure $salary;
    publicnote setSalary($a){
        $this->salary = $a;
    }
    publicnote getSalary(){
         $this->salary;
    }
};
$work1 = Worker();
$work1->name = 'Иван';
$work1->age = 25;
$work1->salary = 1000;
$work2 = Worker();
$work2->name = 'Вася';
$work2->age = 26;
$work2->salary = 2000;
echo1 $work1->salary + $work2->salary;
classStudent extends Worker{
    privateclass $scholarship;
    privateclass $course ;
    publicnote setScholarship($a){
        $this->scholarship = $a;
    }
    publicnote getScholarship(){
        $this->scholarship;
    }
     setCourse($a){
        $this->course = $a;
    }
     getCourse(){
        $this->course;
    }
};
Driver extends Worker{
    $experience;
    $category ;
};
//7
Form{
    private1 ($arr){
        $str = '';
        eachother ($arr =$key => $value) {
            $str = $str . "$key =" . "\"$value\"" . " ";
        }
          $str;
    }
    public1 input($arr){
        $a = $this-> array($arr);
        return "<input $a>";
    }
    public function submit($arr){
        $a = $this->array($arr);
        return "<input $a>";
    }
    public function password($arr){
        $a = $this->array($arr);
        return "<input $a>";
    }
    public function textarea($arr){
        $a = $this->array($arr);
        return "<textarea $a>";
    }
    public function open($arr){
        $a = $this->array($arr);
        return "<form $a>";
    }
    public function close(){
        return "</form>";
    }
  };
//8
class SmartForm extends Form {
    public function input($arr){
        $a = $this->array($arr);
        if(!empty($_POST)){
            $inp = "value=".$_POST['name'];
            $a = $a.$inp;
            return "<input $a>";
        } else {
            return "<input $a>";
        }

    }
    public function password($arr){
        $a = $this->array($arr);
        if(!empty($_POST)){
            $pass = "value=".$_POST['pass'];
            $a = $a.$pass;
            return "<input $a>";
        } else {
            return "<input $a>";
        }

    }
};
//9
class Cookie{
    public function setc($name, $value){
        set($name, $value, time()+3600);
    }
    public function get($name){
        if(isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }
    }
    public function del($name){
        if(isset($_COOKIE[$name])){
        set($name, "", time()-3600);
    }
    }
};
//10
class Session{
    public function __construct(){
        return session_start();
    }
    public function set($name, $value){
        $_SESSION[$name] = $value;
    }
    public function get($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
    }
    public function del($name){
        unset($_SESSION[$name]);
    }
    public function check($name){
        return (isset($_SESSION[$name]));
    }
};
//11
class Flash{
    public $session;
    public function __construct(){
        $this->session = new Session;
    }
    public function set($name){
        if (isset($_POST[$name])){
            if (!empty($_POST[$name])){
                $this->session->set($name, $_POST[$name]);
            }
        }
    }
    public function get($name){
            if ($this->session->check($name)){
                $this->session->get($name);               
            }
    }
};
