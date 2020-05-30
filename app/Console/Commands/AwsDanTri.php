<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class AwsDanTri extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aws:dantri';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $html = file_get_html("https://dantri.com.vn/giao-duc-khuyen-hoc.htm");
        $tins = $html->find("[data-boxtype='timelineposition']");
        foreach ($tins as $t) {
            $a = $t->find("a", 0);
            $title = $a->attr["title"];
            $href = $a->href;
            $img = $a->find("img", 0)->src;
            $short_content = $t->find("div.mr1 div", 0);

            $data = [
                'title' => $title,
                'image_url' => $img,
                'short_content' => $short_content,
            ];
            Post::created($data);
            print ("lay du lieu thanh cong" . "\n");
            }
    }
}
