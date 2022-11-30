<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    //
    public function showServiceContainerTest()
    {
        // これでサービスコンテナにこのクラスを登録する
        // dd(app()) で表示できる binding の項目で確認できる
        app()->bind('lifeCycleTest', function (){
          return 'ライフサイクルテスト';
        });

        // サービスコンテナの内容を取り出す
        $test = app()->make('lifeCycleTest');

        // サービスコンテナなしのパターン
        $message = new Message();
        $sample = new Sample($message);
        $sample->run();

        // サービスコンテナ使うパターン
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }
}

class Sample
{
    public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function run()
    {
        $this->message->send();
    }
}


class Message
{
    public function send()
    {
        echo('メッセージ表示');
    }

}
