<div>
    @foreach($blocks as $index => $block)
        <div>
            <textarea wire:model="blocks.{{ $index }}"></textarea>
            <button wire:click="removeBlock({{ $index }})">Remove</button>
        </div>
    @endforeach

    <button wire:click="addBlock">Add Block</button>
  </div>
