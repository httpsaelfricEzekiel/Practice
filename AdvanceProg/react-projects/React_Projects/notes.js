class Notes extends React.Component {
    constructor(){
        super();
        this.state = {
            notes: [],
            newNote: ""
        };

        this.handleInputChange = this.handleInputChange;
        this.handleAddNote = this.handleAddNote;
        this.handleClearNotes = this.handleClearNotes;
        this.handleShowAllNotes = this.handleShowAllNotes;
    }

    handleInputChange(e){
        this.setState({newNote: e.target.value});
    }

    handleAddNote(){
        this.setState((note_state) => ({
            notes: [...note_state.notes, note_state.newNote],
            newNote: ''
        }));
    }
    render(){
        return (
            <div>
                <h1>Stick Notes</h1>
                <input type="text" onChange={this.handleInputChange} value={this.state.newNote}/>
                <button onClick={this.handleAddNote}>Add Notes</button>
                <button>Clear Notes</button>
                <button>Show all Notes</button>
                <ul>
                    {this.state.notes.map((note, index) => (
                        <li key={index}>
                            {note}
                        </li>
                    ))};
                </ul>
            </div>
        )

    }
}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Notes/>);