<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Git extends Model
{
    public static function dir_getLatestCommit($dir, $repoPath) {


        $gitPath = $repoPath . '\.git';
        $str = shell_exec("git --git-dir=" . $gitPath . " log --pretty=format:%H/#-%an/#-%ar/#-%s -n 1 -- " . $dir);

        if (strlen($str) == 0) {

            return [
                "hash"    => 'untracked',
                "author"  => 'untracked',
                "date"    => 'untracked',
                "message" => 'untracked',
            ];
        }

        $str = explode('/#-', $str);

        return [
            "hash"    => $str[0],
            "author"  => $str[1],
            "date"    => $str[2],
            "message" => $str[3],
        ];
    }

    public static function createRepository($repoPath) {
        $gitPath = $repoPath . '\.git';
        $str = shell_exec("git --git-dir=".$gitPath." init");
        return $str;
    }

    public static function initBare($title){

        Storage::makeDirectory('/public/repos/remotes/'.$title.'.git');

        $absolutePath = storage_path().'\app\public\repos\remotes\\'.$title.'.git\\';

        shell_exec("git --git-dir=".$absolutePath." init --bare");

        return true;
    }

    public static function cloneRemote($name){

        Storage::makeDirectory('/public/repos/clones/'.$name);

        $absolutePath = storage_path().'\app\public\repos\remotes\\'.$name.'.git\\';
        $absolutePath2 = storage_path() . '\app\public\repos\clones\\' . $name;

        shell_exec('git clone '.$absolutePath. ' '. $absolutePath2);
        shell_exec('touch post-receive');
        shell_exec('chmod +x post-receive');
        shell_exec('cd '.$absolutePath);


        return true;
    }
}
