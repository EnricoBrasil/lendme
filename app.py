from flask import Flask, render_template, request, jsonify, session
from flask_session import Session
from chat import answer_questions, load_data, add_to_data
from flask_cors import CORS, cross_origin

data = load_data('data.json')

app = Flask(__name__)
app.config['SESSION_TYPE'] = 'filesystem'
Session(app)
w_answer = "Desculpe, não sei responder a esta pergunta. Poderia me ensinar? (Digite a resposta ou 'não')"

@app.route("/")
def ajuda():
    print(request.script_root)
    return render_template("ajuda.php", scriptRoot = request.script_root)

@app.route("/chatbot", methods=["POST", "GET"])
def chatbot():   
    text = request.get_json().get("message")
    response = answer_questions(text, data)

    if response == w_answer:
        if text == 'não':
            response = 'Ok. Podemos continuar então.'
        elif 'question' not in session:
            session["question"] = text
        elif 'answer' not in session:
            session['answer'] = text
            session['step'] = 1
   
    if 'question' in session and 'answer' in session and session['step'] == 1:
        add_to_data(session['question'], session['answer'], data)
        #save_new_data('data.json', data)
        session.pop('question', None)
        session.pop('answer', None)
        session.pop('step', None)
        response = "Obrigado por me ensinar algo novo!"

    message = {"answer": response}
    return jsonify(message)

if __name__ == "__main__":
    app.run(host="0.0.0.0")

