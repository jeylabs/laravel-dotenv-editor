<?php
namespace Jeylabs\DotenvEditor\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\File;

class EnvUpdate implements ShouldQueue
{
    use  InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $env;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $env)
    {
        $this->data = $data;
        $this->env = $env;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(is_array($this->data)){
            $newArray = array();
            $c = 0;
            foreach($this->data as $key => $value){
                if(is_string($value)) {
                    $value = '' . $value . '';
                }

                $newArray[$c] = $key . "=" . $value;
                $c++;
            }

            $newArray = implode("\n", $newArray);
            File::put($this->env, $newArray);
        }
    }
}
