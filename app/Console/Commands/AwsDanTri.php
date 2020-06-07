<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

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
        $html = file_get_html("https://dantri.com.vn/xa-hoi.htm");
        $tins = $html->find("[data-boxtype='timelineposition']");
        foreach ($tins as $t) {
            $a = $t->find("a", 0);
            $title = $a->attr["title"];
            $href = $a->href;
//            $ct = "https://dantri.com.vn" . $href;
//            $content = file_get_html($ct)->find("div#divNewsContent", 0);
                $ct = "https://dantri.com.vn" . $href;
                if (strpos($href, 'https://') == false) {
                    $contents = file_get_html($ct);
                    $content = $contents->find("div#divNewsContent", 0);
                } else {
//                $href;
                    $contents = file_get_html($href);
                    $content = $contents->find("div.detail-content", 0);
                }
                $img = $a->find("img", 0)->src;
                $short_content = $t->find("div.mr1 div", 0)->plaintext;
                $div = $t->find("div", 0);
                $source_id = $div->attr["data-id"];
                $data = [
                    'title' => $title,
                    'image_url' => $img,
                    'short_content' => $short_content,
                    'content' => $content,
                    'source_id' => $source_id,
                    'tag_id' => 2,
                    'status_id' => 2,
                    'type_id' => 1,
                ];
                /** @var Model $post */
                $isExisting = Post::where('source_id', $source_id)->get()->first();
                if (!$isExisting) {
                    Post::create($data);
                    print ("lay du lieu thanh cong" . "\n");
                }
                else {
                    print ("khong co gi de tao" . "\n");
                }

        }

    }
}
