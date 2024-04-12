<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function welcome(Item $item=null) {
        $items = Item::orderBy('id', 'desc')->simplePaginate(5);
        return view('welcome', ['items' => $items, 'selectedItem' => $item]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //1) get the query params
        $search = $request->query('search');
        $sort = $request->query('sort');
        $last_updated_by = $request->query('last_updated_by');

        //2) get items based on the query params
        $query = Item::query();
        if(isset($search) && $search != '') {
            //a) search field
            $query->where('name', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->orderBy('id', 'desc');

        } else if (isset($sort) || isset($last_updated_by)) {
            if($last_updated_by != '') {

                // echo 'true';
                //b) last updated by field
                $query->where('last_updated_by', $last_updated_by);
            }
            if($sort != '') {
                //c) sort by field
                $query = $this->query_items_sort_by($query, $sort);
            }
        } else {
            $query->orderBy('id', 'desc');
        }
        $total_items = $query->count(); // Get the count of items without pagination
        $items = $query->paginate(5);
        $items->appends(['search'=> $search,'sort' => $sort, 'last_updated_by'=>$last_updated_by]); //append the current query parameters to the pagination 

        //3) for last updated by dropdown field:
        $users = User::select('id', 'name')->get();

        //4) for sort dropdown field:
        $sortBy = [
            [ 'name'=>'Item name: Alphabetical order', 'value'=>'name_asc', 'is_selected' => 0 ],
            [ 'name'=>'Price: Low to High', 'value'=>'price_asc', 'is_selected' => 0 ],
            [ 'name'=>'Price: High to Low', 'value'=>'price_desc', 'is_selected' => 0 ],
        ];
        // &$value makes $value a reference to the actual element in the array, so modifying $value will modify the original element in the $sortBy array.
        foreach ($sortBy as &$value) {
            if($value['value'] == $sort) {
                $value['is_selected'] = 1;
            }
        }
        unset($value); // Unset the reference to avoid accidental modification outside the loop

        //5) return
        return view('item.index', ['items' => $items, 'users'=>$users, 'search'=> $search, 'sort_by' => $sortBy, 'last_updated_by'=>$last_updated_by, 'total_items' => $total_items ]);
    }

    private function query_items_sort_by($query, string $sort) {
        $columnName=null; //field name
        $order=null; //asc or desc
        switch ($sort) {
            case 'name_asc':
                $columnName = 'name';
                $order = 'asc';
                break;
            case 'price_asc':
                $columnName = 'price';
                $order = 'asc';
                break;
            case 'price_desc':
                $columnName = 'price';
                $order = 'desc';
                break;
            default:
                $columnName = 'created_at';
                $order = 'desc';
                break;
        }

        return $query->orderBy($columnName, $order);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['string'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ]);

        $data['last_updated_by'] = $request->user()->id;
        $item = Item::create($data);

        return to_route('item.index', $item)->with('message', 'New item was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('item.edit', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['string'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ]);
        $data['last_updated_by'] = $request->user()->id;
        $item->update($data);
        return to_route('item.edit', $item)->with('message', 'Item was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return to_route('item.index')->with('message', 'Item was deleted');
    }
}
