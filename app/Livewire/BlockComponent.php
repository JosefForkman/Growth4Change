<?php

namespace App\Livewire;

use Livewire\Component;

class BlockComponent extends Component
{
    public $blocks = [];
    public $pageId;

    public function mount($pageId)
    {
        $this->pageId = $pageId;
    }

    public function submit()
    {
        // Save the blocks to the database
        $page = Page::findOrFail($this->pageId);
        $page->content_blocks = $this->blocks;
        $page->save();
    }

    public function addBlock()
    {
        $this->blocks[] = '';
    }

    public function removeBlock($index)
    {
        unset($this->blocks[$index]);
        $this->blocks = array_values($this->blocks);
    }

    public function render()
    {
        return view('livewire.block-component');
    }
}
