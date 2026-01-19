<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $showEditModal = false;
    public $editCategoryId;
    public $editCategoryName;
    public $editCategoryStatus;
    public $showAddModal = false;
    public $addCategoryName;
    public $addCategoryStatus='active';
    public function render()
    {
        $categories= Category::all();
        return view('livewire.admin.categories', compact('categories'));
    }
    public function editCategory($id)
    {
        $category = Category::find($id);
        $this->editCategoryId = $category->id;
        $this->editCategoryName = $category->name;
        $this->editCategoryStatus = $category->status;
        $this->showEditModal = true;
    }
    public function updateCategory()
    {
        $this->validate([
            'editCategoryName' => 'required',
            'editCategoryStatus' => 'required',
        ]);
        $category = Category::find($this->editCategoryId);
        $category->name = $this->editCategoryName;
        $category->status = $this->editCategoryStatus;
        $category->save();
        $this->showEditModal = false;
        $this->dispatch('success', 'Category updated successfully.');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        $this->dispatch('success', 'Category deleted successfully.');
    }
    public function toggleCategory($id, $action)
    {
        $category = Category::find($id);
        $category->status = $action;
        $category->save();
        $actionText = $action === 'active' ? 'activated' : 'deactivated';
        $this->dispatch('success', "Category {$actionText} successfully.");
    }
    public function addCategory()
    {
        $this->validate([
            'addCategoryName' => 'required',
            'addCategoryStatus' => 'required',
        ]);
        $category = new Category();
        $category->name = $this->addCategoryName;
        $category->status = $this->addCategoryStatus;
        $category->save();
        $this->addCategoryName = '';
        $this->addCategoryStatus = 'active';
        $this->showAddModal = false;
        $this->dispatch('success', 'Category added successfully.');
    }
    public function closeEditModal()
    {
        $this->showEditModal = false;
        $this->resetValidation();
        $this->resetErrorBag();
    }
    public function openAddModal()
    {
        $this->showAddModal = true;
    }
    public function closeAddModal()
    {
        $this->showAddModal = false;
        $this->resetValidation();
        $this->resetErrorBag();
    }
}
