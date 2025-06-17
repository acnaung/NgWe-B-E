import tkinter as tk
from tkinter import ttk

# Initialize main window
root = tk.Tk()
root.title("Burst Loads: 9 5/8\" Intermediate Casing")
root.geometry("700x500")

# Tabs
notebook = ttk.Notebook(root)
notebook.pack(padx=10, pady=10, fill='both', expand=True)

# "Select" tab
select_tab = ttk.Frame(notebook)
notebook.add(select_tab, text="Select")

# Frames inside tab
drilling_frame = ttk.LabelFrame(select_tab, text="Drilling Loads")
drilling_frame.grid(row=0, column=0, padx=10, pady=10, sticky='n')

production_frame = ttk.LabelFrame(select_tab, text="Production Loads")
production_frame.grid(row=0, column=1, padx=10, pady=10, sticky='n')

internal_profile_frame = ttk.LabelFrame(select_tab, text="Internal Profile")
internal_profile_frame.grid(row=1, column=0, padx=10, pady=10, sticky='w')

external_profile_frame = ttk.LabelFrame(select_tab, text="External Profile")
external_profile_frame.grid(row=1, column=1, padx=10, pady=10, sticky='w')

# Drilling Loads checkboxes
drill_options = [
    "Displacement to Gas",
    "Gas Kick Profile",
    "Fracture @ Shoe w/ Gas Gradient Above",
    "Fracture @ Shoe w/ 1/3 BHP at Surface",
    "Lost Returns with Water",
    "Surface Protection (BOP)",
    "Pressure Test",
    "Green Cement Pressure Test",
    "Drill Ahead"
]




# Create internal listbox early
internal_listbox = tk.Listbox(internal_profile_frame, width=40, height=10)
internal_listbox.pack(padx=5, pady=5)

# Define the update function BEFORE using it
def update_internal_profile_listbox():
    internal_listbox.delete(0, tk.END)
    for label, var in drill_vars.items():
        if var.get():
            internal_listbox.insert(tk.END, label)

# Create drilling checkboxes
drill_vars = {}
for i, opt in enumerate(drill_options):
    drill_vars[opt] = tk.BooleanVar(value=opt in ["Displacement to Gas", "Pressure Test", "Green Cement Pressure Test"])
    cb = tk.Checkbutton(drilling_frame, text=opt, variable=drill_vars[opt],
                        command=update_internal_profile_listbox)
    cb.grid(row=i, column=0, sticky='w')

# Initial sync of listbox with default checked items
update_internal_profile_listbox()    

# Production Loads (disabled)
prod_options = [
    "Tubing Leak",
    "Stimulation Surface Leak",
    "Injection Down Casing",
    "Gas Migration"
]
for i, opt in enumerate(prod_options):
    cb = tk.Checkbutton(production_frame, text=opt, state='disabled')
    cb.grid(row=i, column=0, sticky='w')






# External Profile radio buttons
external_profiles = [
    "Mud and Cement Mix-Water",
    "Permeable Zones",
    "Minimum Formation Pore Pressure",
    "Pore Pressure w/ Seawater Gradient",
    "Fluid Gradients w/ Pore Pressure"
]
ext_var = tk.StringVar(value="Fluid Gradients w/ Pore Pressure")
for i, opt in enumerate(external_profiles):
    tk.Radiobutton(external_profile_frame, text=opt, variable=ext_var, value=opt).grid(row=i, column=0, sticky='w')

# Buttons
button_frame = tk.Frame(root)
button_frame.pack(pady=5)
tk.Button(button_frame, text="OK", width=10).pack(side='left', padx=5)
tk.Button(button_frame, text="Cancel", width=10).pack(side='left', padx=5)
tk.Button(button_frame, text="Apply", width=10, state='disabled').pack(side='left', padx=5)
tk.Button(button_frame, text="Help", width=10).pack(side='left', padx=5)

# Run the main loop
root.mainloop()
