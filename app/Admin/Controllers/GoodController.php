<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class GoodController extends Controller
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

            $content->header('商品');
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

            $content->header('商品');
            $content->description('发布');
            // $this->showFormParameters($content);
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
        return Admin::grid(Good::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('name', '商品名称');
            $grid->column('category.name', '分类')->display(function() {
                return "<span class='label label-success'> " . $this->category['name'] . "</span>";
            });
            $grid->column('price', '价格')->display(function(){
                return '<span class="text-danger"> ￥' .$this->price . '</span>';
            });
            $grid->column('is_sale', '销售')->display(function(){
                if($this->is_sale){
                    return '<span class="label label-success">在售</span>';
                }
                return '<span class="label label-danger">停售</span>';
            });
            $grid->column('is_new', '新品')->display(function(){
                if($this->is_new){
                    return '<span class="label label-success">是</span>';
                }
                return '<span class="label label-danger">否</span>';
            });
            $grid->column('is_hot', '热售')->display(function(){
                if($this->is_hot){
                    return '<span class="label label-success">是</span>';
                }
                return '<span class="label label-danger">否</span>';
            });
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Good::class, function (Form $form) {
            // $form->tab('商品信息', function(Form $form){
            // $form->display('id', 'ID');
            $temp = Category::all()->toArray();
            foreach ($temp as $key => $value) {
                $category[$value['id']] = $value['name'];
            }
            // var_dump($category);
            $form->text('name', '商品名称')->rules('required|min:2|max:50');
            $form->text('slug', '名称拼音');
            $form->select('category_id', '商品分类')->options($category);
            $form->currency('price', '推荐价格')->symbol('￥')->rules('required');
            $states = [
                'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
            ];
            $form->switch('is_sale', '销售情况')->states($states);
            $form->switch('is_hot', '热门商品')->states($states);
            $form->switch('is_new', '最新商品')->states($states);
            $form->image('img', '商品图片')->uniqueName()->rules('required');
            $form->editor('description', '商品描述')->rules('required');
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
            // });

        });
    }
}
