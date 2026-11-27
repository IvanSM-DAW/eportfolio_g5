<x-layout titulo="Nueva evidencia">
    <h2 class="text-2xl font-semibold">
                Nueva evidencia
    </h2>
    <div>
        <label for="estudiante_id" class="block font-semibold">Estudiante</label>
        <input type="text" name="estudiante_id" id="estudiante_id" value="{{ old('estudiante_id') }}" @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('estudiante_id')])>
        @error('estudiante_id')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="tarea_id" class="block font-semibold">Tarea</label>
        <input type="text" name="tarea_id" id="tarea_id" value="{{ old('tarea_id') }}" @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('tarea_id')])>
        @error('tarea_id')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="url" class="block font-semibold">Direccion</label>
        <input type="text" name="url" id="url" value="{{ old('url') }}" @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('url')])>
        @error('url')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="descripcion" class="block font-semibold">Descripción</label>
        <textarea name="descripcion" id="descripcion" @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('descripcion')])>{{ old('descripcion') }}</textarea>
        @error('descripcion')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="estado_validacion" class="block font-semibold">Estado de validación</label>
        <select name="estado_validacion" id="estado_validacion" @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('estado_validacion')])>
            <option value="">Seleccione un estado</option>
            <option value="validada" {{ old('estado_validacion') === 'validada' ? 'selected' : '' }}>Validada</option>
            <option value="pendiente" {{ old('estado_validacion') === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="rechazada" {{ old('estado_validacion') === 'rechazada' ? 'selected' : '' }}>Rechazada</option>
            <option value="asignada" {{ old('estado_validacion') === 'asignada' ? 'selected' : '' }}>Asignada</option>
        </select>
        @error('estado_validacion')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex gap-3 pt-2">
        <x-sendit.boton :href="route('evidencias.index')" alt>
            Añadir evidencia
        </x-sendit.boton>               
    
</x-layout>