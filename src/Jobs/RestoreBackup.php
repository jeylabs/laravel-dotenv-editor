<?php
namespace Jeylabs\DotenvEditor\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\File;

class RestoreBackup implements ShouldQueue
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
        copy($this->data, $this->env);
    }
}
