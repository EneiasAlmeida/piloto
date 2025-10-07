<?php


namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ListViews extends Command
{
protected $signature = 'views:list';
protected $description = 'Lista todas as views do projeto';

public function handle()
{
$views = File::allFiles(resource_path('views'));

foreach ($views as $view) {
$relativePath = str_replace(resource_path('views') . DIRECTORY_SEPARATOR, '', $view->getRealPath());
$viewName = str_replace(['/', '\\', '.blade.php'], ['.', '.', ''], $relativePath);
$this->line($viewName);
}

return 0;
}
}