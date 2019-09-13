<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this îïðåäåëåíà (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this íå îïðåäåëåíà.\n";
        }
    }
}
class B
{
    function bar()
    {
        A::foo();
    }
}
$a = new A();
$a->foo();
A::foo();
$b = new B();
$b->bar();
B::bar();
?>
