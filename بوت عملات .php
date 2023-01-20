import requests
import json
from telegram.ext import Updater, CommandHandler
# هذا الملف كتابة أبو أسيل وهو مجاني للكل
def start(update, context):
    message = """
🇮🇶- مرحبا بك عزيزي أنا بوت تحويل بين العملات
🇮🇶- طريقة استخدام سهلة جدا جدا 
🇮🇶- /rate USD IQD 100
🇮🇶- بمعنى نضع رمز العملة الأولى ثم نضع رمز العملة الثانية ثم المبلغ

    """
    video_url = "https://t.me/boo00oks/2741"
    context.bot.send_video(chat_id=update.message.chat_id, video=video_url, caption=message)

currencies = ["USD", "EUR", "GBP", "CAD", "JPY", "INR", "AUD", "CHF", "SAR", "EGP", "IQD", "NZD", "DKK", "SGD", "HKD", "ZAR", "AUD", "NOK", "RUB", "MXN", "CZK", "TRY", "LBP", "HUF", "INR", "ILS", "SYP", "JOD", "YER", "LYD", "SDG", "MAD", "TND", "KWD", "DZD", "MRO", "BHD", "QAR", "AED", "OMR", "SOS", "PP", "FDJ", "KMF"]

def get_exchange_rate(base, target):
    url = f"https://api.exchangerate-api.com/v4/latest/{base}"
    response = requests.get(url)
    data = json.loads(response.text)
    return data["rates"][target]

def exchange_rate(update, context):
    if len(context.args) < 3:
        update.message.reply_text("حبيبي غلط اكتب /start وشاهد الفيديو ولا تجنني")
        return
    base = context.args[0].upper()
    target = context.args[1].upper()
    amount = float(context.args[2])
    if base not in currencies:
        update.message.reply_text(f"حبيبي غلط اكتب /start وشاهد الفيديو ولا تجنني")
        return
    if target not in currencies:
        update.message.reply_text(f"حبيبي غلط اكتب /start وشاهد الفيديو ولا تجنني")
        return
    rate = get_exchange_rate(base, target)
    target_amount = rate * amount
    message = f"{amount} {base} = {target_amount} {target}"
    update.message.reply_text(message)

def main():5474837446:AAHZnrEUXjrg0vqk3FCwb0L2Cz8gXjIdEyM

    # توكنك هنا
    updater = Updater("
    5474837446:AAHZnrEUXjrg0vqk3FCwb0L2Cz8gXjIdEyM", use_context=True)
    dp = updater.dispatcher



    dp.add_handler(CommandHandler("start", start))
    dp.add_handler(CommandHandler("rate", exchange_rate))


    updater.start_polling()
    updater.idle()

if __name__ == '__main__':
    main()
start وشاهد الفيديو ولا تجنني")
        return
    base = context.args[0].upper()
    target = context.args[1].upper()
    amount = float(context.args[2])
    if base not in currencies:
        update.message.reply_text(f"حبيبي غلط اكتب /start وشاهد الفيديو ولا تجنني")
        return
    if target not in currencies:
        update.message.reply_text(f"حبيبي غلط اكتب /start وشاهد الفيديو ولا تجنني")
        return
    rate = get_exchange_rate(base, target)
    target_amount = rate * amount
    message = f"{amount} {base} = {target_amount} {target}"
    update.message.reply_text(message)

def main():5474837446:AAHZnrEUXjrg0vqk3FCwb0L2Cz8gXjIdEyM

    # توكنك ه
    if($text == "تقييم") {
bot( sendMessage ,[
 chat_id =>$chat_id,
 text => . قيم البوت ,
 reply_to_message_id =>$message_id,
 reply_markup =>json_encode([
 inline_keyboard =>[
[[ text => ⭐ , callback_data  =>"Tqm#1"]],
[[ text => ⭐⭐ , callback_data  =>"Tqm#2"]],
[[ text => ⭐⭐⭐ , callback_data  =>"Tqm#3"]],
[[ text => ⭐⭐⭐⭐ , callback_data  =>"Tqm#4"]],
[[ text => ⭐⭐⭐⭐⭐ , callback_data  =>"Tqm#5"]],
]])
]);
}

$tqm = explode("#", $data)[1];

if(explode("#", $data)[0] == "Tqm") {
bot( EditMessageText ,[
 chat_id  =>$chat_id,
 message_id =>$message_id,
 text =>
"
مشكورين عله تقيمك للبوت

تقيمك : $tqm
", 


]);
}

