<label for="title">Title</label>
    <input type="text" name="title" value="{{ old('title') ?? $review->title }}" required>
    @error('title')
    <p>{{ $message }}</p>
    @enderror

    <label for="text">Text</label>
    <textarea name="text" cols="30" rows="10" required>{{ old('text') ?? $review->text }}</textarea>
    @error('text')
    <p>{{ $message }}</p>
    @enderror


    <label for="subject_id">Subject</label>
    <select name="subject_id">
      @foreach($subjects as $subject)
        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
      @endforeach
    </select>
    @error('subject_id')
    <p>{{ $message }}</p>
    @enderror
    
    @csrf
    
    <button type="submit" style="margin-top: 50px">OK</button>
  </form>