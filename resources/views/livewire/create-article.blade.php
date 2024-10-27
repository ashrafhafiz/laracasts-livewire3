<div class="mx-auto mb-4 w-3/4">
    <h3 class="mb-3 text-lg text-gray-200">Create Article</h3>

    <form wire:submit="save">
        <div class="mb-3">
            <label class="block" for="article-title">Title</label>
            <input type="text" id="article-title" class="p-2 w-full text-white bg-gray-700 rounded border"
                wire:model="form.title">
            <div class="text-xs text-red-500">
                @error('form.title')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="block" for="article-content">Content</label>
            <textarea id="article-content" class="p-2 w-full text-white bg-gray-700 rounded border" wire:model="form.content"></textarea>
            <div class="text-xs text-red-500">
                @error('form.content')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="flex gap-2 items-center">
                <input type="checkbox" name="published" wire:model.boolean="form.published">
                Published
            </label>
        </div>
        <div class="mb-3">
            <div>
                <div class="mb-2">Notification Options</div>
                <div class="flex gap-6">
                    <label class="flex gap-2 items-center">
                        <input type="radio" value="email" wire:model="form.notification">
                        Email
                    </label>
                    <label class="flex gap-2 items-center">
                        <input type="radio" value="sms" wire:model="form.notification">
                        SMS
                    </label>
                    <label class="flex gap-2 items-center">
                        <input type="radio" value="none" wire:model="form.notification">
                        None
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button class="px-3 py-2 text-xs font-bold text-white bg-indigo-700 rounded hover:bg-indigo-900">
                Save
            </button>
        </div>
    </form>
</div>
