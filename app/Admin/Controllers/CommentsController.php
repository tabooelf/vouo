<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('消息');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Comment::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('name', '名字');
            $grid->column('mobile', '手机号');
            $grid->column('content', '留言');
            $states = [
              'on'  => ['value' => 1, 'text' => '已读', 'color' => 'success'],
              'off' => ['value' => 0, 'text' => '未读', 'color' => 'danger'],
            ];


            $grid->column('email', '邮箱');
            $grid->created_at('时间')->sortable();
            $grid->readed('状态')->switch($states);
            // $grid->updated_at();
            $grid->disableActions();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Comment::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
    public function update(Comment $comment, Request $request)
    {
        if ( $request->get('readed') == 'on' ) {
            $readed = 1;
        }else if( $request->get('readed') == 'off'){
            $readed = 0;
        }else{
            return;
        }
        $comment->readed = $readed;
        $comment->save();
    }
}
