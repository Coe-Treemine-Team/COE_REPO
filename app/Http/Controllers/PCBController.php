namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PCBController extends Controller
{
    public function submitPrototype(Request $request)
    {
        // Validate form data if needed
        $validatedData = $request->validate([
            'dimensions' => 'required',
            'base_material' => 'required',
            // Add validation rules for other inputs as needed
        ]);

        // Store form data in session
        Session::put('prototype_config', $validatedData);

        // Optionally, you can retrieve and return the stored data for confirmation
        // $prototypeConfig = Session::get('prototype_config');

        // Redirect to another page or route
        return redirect()->route('next.step.prototype');
    }

    public function submitAssembly(Request $request)
    {
        // Validate form data if needed
        $validatedData = $request->validate([
            'pcb_dimensions_assembly' => 'required',
            'pcb_base_material_assembly' => 'required',
            // Add validation rules for other inputs as needed
        ]);

        // Store form data in session
        Session::put('assembly_config', $validatedData);

        // Optionally, you can retrieve and return the stored data for confirmation
        // $assemblyConfig = Session::get('assembly_config');

        // Redirect to another page or route
        return redirect()->route('next.step.assembly');
    }
}
