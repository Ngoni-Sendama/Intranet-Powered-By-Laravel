<div>
    <form wire:submit.prevent="submit">
        <div class="modal-body">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ Auth::user()->profile_photo_url }}" class="avatar-60 rounded-circle me-2">
                <input type="text" wire:model="post" class="form-control rounded" style="border:none;"
                    placeholder="Write something here...">
            </div>

            <div class="mb-3">
                <input type="text" wire:model="location" class="form-control" style="border:none;"
                    placeholder="Location (optional)">
            </div>

            <div class="mb-3">
                <select name="category" class="form-control" style="border:none;" wire:model="category">
                    <option value="">Select Category</option>
                    <option value="Surface Mining">Surface Mining</option>
                    <option value="Underground Mining">Underground Mining</option>
                    <option value="Placer Mining">Placer Mining</option>
                    <option value="In-Situ Mining">In-Situ Mining</option>
                    <option value="Safety and Health">Safety and Health</option>
                </select>
            </div>

            <div class="mb-3">
                <input type="file" wire:model="media" multiple class="form-control">
                @error('media.*')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            @if ($media)
                <div class="mb-3 d-flex flex-wrap gap-3">
                    @foreach ($media as $file)
                        @if (in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/gif', 'image/webp']))
                            <img src="{{ $file->temporaryUrl() }}" class="rounded" width="100">
                        @elseif (str_starts_with($file->getMimeType(), 'video/'))
                            <video width="150" controls class="rounded">
                                <source src="{{ $file->temporaryUrl() }}" type="{{ $file->getMimeType() }}">
                                Your browser does not support the video tag.
                            </video>
                        @else
                            <div>
                                <i class="ri-file-fill text-secondary"></i>
                                {{ $file->getClientOriginalName() }}
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <button type="submit" class="btn btn-primary w-100">Post</button>
        </div>
    </form>
</div>
