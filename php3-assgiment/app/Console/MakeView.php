<?php

namespace App\Console;

use Illuminate\Console\Command;
use File;

class MakeView extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';// dòng lệnh để tạo view

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('view');// lấy tên của view muốn tạo

        $path = $this->viewPath($view);// sử lý đường dẫn file

        $this->createDir($path);// trả về đường dẫn của thư mục cha
//Kiểm tra sự tồn tại của file
        if (File::exists($path)) {
            $this->error("View {$path} already exists!");// thông báo file đã tồn tại
            return;
        }

        File::put($path, $path);

        $this->info("View {$path} created.");// thông báo đã tạo file thành công
    }

    /**
     * Get the view full path.
     *
     * @param $view
     * @return string
     */
    private function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        return "resources/views/{$view}";
    }

    /**
     * Create view directory if not exists.
     *
     * @param $path
     */
    private function createDir($path)
    {
        $dir = dirname($path);

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
