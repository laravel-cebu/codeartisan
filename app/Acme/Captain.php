<?php

interface WorkerInterface {
    public function work();
    public function sleep();
}

class Worker {
    public function work()
    {

    }

    public function sleep()
    {

    }
}

class HumanWorker implements WorkerInterface {

   public function work()
   {
       echo 'human working';
   }

   public function sleep()
   {
       echo 'human sleeping';
   }

}

class AndroidWorker implements WorkerInterface {
    public function work()
    {
        echo 'android working';
    }

    public function sleep()
    {
        echo ''; // ISP: Violation as it forces us to implement sleep where it doesn't make sense
    }
}


class Captain {
    public function manage(Worker $worker)
    {
        $worker->work();
        $worker->sleep();
    }
}