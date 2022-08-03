package com.example.hapebaru;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity<countUp, mShowCount> extends AppCompatActivity {
    private int mCount = 0;
    private TextView mShowCount;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void showToast(View view) {
        Context context = getApplicationContext();
        Toast toast = Toast.makeText(this, R.string.toast_messages, Toast.LENGTH_SHORT);
        toast.show();
    }
    public void countDown(View view){
        countUp Method;
        mShowCount = (TextView) findViewById(R.id.show_count);
        mCount--;
        if (mShowCount != null)
            mShowCount.setText(Integer.toString(mCount));
    }
    public void countUp(View view) {
        countUp Method;
        mShowCount = (TextView) findViewById(R.id.show_count);
        mCount++;
        if (mShowCount != null)
            mShowCount.setText(Integer.toString(mCount));
    }






}