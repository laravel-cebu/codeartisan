<?php

interface WorkableInterface {
    public function work();
}

interface SleepableInterface {
    public function sleep();
}

interface ManageableInterface {
    public function beManaged();
}

class Worker {
    public function work()
    {

    }

    public function sleep()
    {

    }
}

class HumanWorker implements WorkeableInterface, SleepableInterface, ManageableInterface {

   public function work()
   {
       echo 'human working';
   }

   public function sleep()
   {
       echo 'human sleeping';
   }

   public function beManaged()
   {
       $this->work();
       $this->sleep();
   }
}

class AndroidWorker implements WorkerInterface, ManageableInterface {
    public function work()
    {
        echo 'android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}


class Captain {
    public function manage(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}