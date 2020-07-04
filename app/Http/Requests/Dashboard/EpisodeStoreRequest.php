<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class EpisodeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'time' => 'required',
            'thumbnail' => 'required|image',
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm,mkv,wmv',
            'series' => 'required',
        ];
    }
}
