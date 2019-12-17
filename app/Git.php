<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
