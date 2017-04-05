export class Helpers {
    static arrayGet(array, key, defaultValue = null) {
        let result;

        try {
            result = array[key];
        } catch (err) {
            return defaultValue;
        }

        if (result === null || typeof result == 'undefined') {
            result = defaultValue;
        }

        return result;
    }

    static jsonEncode(object) {
        if (typeof object === 'undefined') {
            object = null;
        }
        return JSON.stringify(object);
    }

    static jsonDecode(jsonString, defaultValue)
    {
        if (typeof jsonString === 'string') {
            let result;
            try {
                result = $.parseJSON(jsonString);
            } catch (err) {
                result = defaultValue;
            }
            return result;
        }
        return null;
    }
}